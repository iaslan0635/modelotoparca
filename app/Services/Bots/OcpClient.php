<?php

namespace App\Services\Bots;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;

class OcpClient
{
    public static function requestWithoutRetry(string $url, bool $gzipRequired = false): string
    {
            $proxy = "socks5://enproyazilim:7YhzvaWDyc@140.228.25.183:50101";
            $headers = [
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/jpeg,image/png,image/apng,*/*;q=0.8',
//                'Accept-Encoding: ' . $gzipRequired ? "gzip, deflate, br":"deflate, br",
                'Accept-Encoding: gzip, deflate', // 🛠️ düzeltildi!
                'Accept-Language: tr,en;q=0.9,en-GB;q=0.8,en-US;q=0.7',
                'Cache-Control: no-cache',
                'Referer: https://www.onlinecarparts.co.uk/spare-parts/bmw/brake-pads/5-f10-f18.html',
                'Sec-CH-UA: "Chromium";v="130", "Microsoft Edge";v="130", "Not?A_Brand";v="99"',
                'Sec-CH-UA-Mobile: ?0',
                'Sec-CH-UA-Platform: "Windows"',
                'Sec-Fetch-Dest: document',
                'Sec-Fetch-Mode: navigate',
                'Sec-Fetch-Site: same-origin',
                'Sec-Fetch-User: ?1',
                'Upgrade-Insecure-Requests: 1',
        //        'Cookie: kmtx_sync=406545511569790842; INGRESSCOOKIE=1729434249.246.27276.540264|f89e2d2acc6cd8c158ba7aaea6f7fb53',
                'Accept-Charset: UTF-8'  // Ensure UTF-8 encoding is accepted
            ];

            $ch = curl_init();

            // Set cURL options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
            curl_setopt($ch, CURLOPT_ENCODING, ''); // Automatically handle gzip/deflate

            // Execute the request
            $response = curl_exec($ch);

            // Check for errors
            if (curl_errno($ch)) {
                curl_close($ch);
                throw new \Error('Error during HTTP request: ' . curl_error($ch));
            } else {
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($httpCode == 200) {
                    // Ensure proper UTF-8 encoding of the response
                    $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

                    // If it's not an image, handle encoding
                    if (!str_contains($contentType, 'image/')) {
                        // Ensure proper UTF-8 encoding of the response
                        $response = mb_convert_encoding($response, 'UTF-8', 'auto');
                    }
                    // Save the response data to a file or print it
                    curl_close($ch);
                    return $response;
                } else {
                    curl_close($ch);
                    throw new \Error("Request failed with status code: $httpCode");
                }
            }

    }

    public static function request(string $url)
    {
        $attempts = 0;
        while (true) {
            try {
                return self::requestWithoutRetry($url);
            } catch (Exception $e) {
                $isGatewayTimeout = $e instanceof ClientException && $e->getResponse()->getStatusCode() !== 524;
                if ($isGatewayTimeout || $attempts >= 3) {
                    throw $e;
                }

                $attempts++;
                sleep(1);
            }
        }
    }

    public static function getJson(string $url, ?bool $associative = null)
    {
        $response = self::request($url);
        $stripped = strip_tags($response);
        return json_decode($stripped, $associative);
    }
}
