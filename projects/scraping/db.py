from sqlalchemy.ext.automap import automap_base
from sqlalchemy.orm import Session
from sqlalchemy import create_engine
from dotenv import dotenv_values
import os

env = dotenv_values(".env")
db_uri = f"{env['DB_CONNECTION']}://{env['DB_USERNAME']}:{env['DB_PASSWORD']}@{env['DB_HOST']}/{env['DB_DATABASE']}"


engine = create_engine(db_uri)
Base = automap_base()
Base.prepare(engine, reflect=True)

# mapped classes are now created with names by default
# matching that of the table name.
LoginData = Base.classes.login_data

db_session = Session(engine)
