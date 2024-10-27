<?php

namespace App\Console\Commands;

use App\Models\Image;
use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class ImageToWebp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:image-to-webp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$directory = storage_path('app/public');
        //$this->convertImagesToWebP($directory);
        // imageable_type'i App\Models\Category olan tüm kayıtları al
        $images = Image::where('imageable_type', 'App\Models\Brand')->get();

        foreach ($images as $image) {
            // Mevcut path değerini kontrol et
            if (str_contains($image->path, '.png')) {
                $newPath = str_replace('.png', '.webp', $image->path);
                $image->path = $newPath;
                $image->save();
            }
        }

        //return 'PNG dosyaları WEBP formatına dönüştürüldü.';
    }

    public function convertImagesToWebP($directory): void
    {
        // Tarayıcıya uygun dosya uzantılarını ayarla
        $validExtensions = ['jpg', 'jpeg', 'png', 'gif'];  // WEBP olmayan formatlar

        // Klasör içerisindeki dosyaları al
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        foreach ($files as $file) {
            if ($file->isDir()) {
                continue; // Eğer dizin ise geç
            }

            $filePath = $file->getRealPath();
            $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

            // Eğer resim dosyası WEBP formatında değilse dönüştür
            if (in_array($extension, $validExtensions)) {
                $webpPath = preg_replace('/\.(jpg|jpeg|png|gif)$/i', '.webp', $filePath);

                if (!file_exists($webpPath)) {
                    // WEBP dosyası mevcut değilse dönüştür
                    try {
                        $image = new \Imagick($filePath);
                        $image->setImageFormat('webp');
                        $image->writeImage($webpPath);
                        $image->clear();
                        $image->destroy();
                        echo "Dönüştürüldü: $filePath -> $webpPath\n";
                    } catch (\Exception $e) {
                        echo "Hata: {$e->getMessage()} - Dosya: $filePath\n";
                    }
                } else {
                    echo "WEBP zaten mevcut: $webpPath\n";
                }
            }
        }
    }
}
