from sqlalchemy.orm import sessionmaker, DeclarativeBase, Mapped, mapped_column, relationship
from sqlalchemy import ForeignKey, create_engine
from dotenv import dotenv_values

env = dotenv_values("../../.env")
uri = f"mysql+mysqldb://{env['DB_USERNAME']}:{env['DB_PASSWORD']}@{env['DB_HOST']}:{env['DB_PORT']}/{env['DB_DATABASE']}"


engine = create_engine(uri)

Session = sessionmaker(engine)


class Base(DeclarativeBase): ...


class Image(Base):
    __tablename__ = "images"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    imageable_type: Mapped[str] = mapped_column()
    imageable_id: Mapped[int]
    path: Mapped[str]


class Car(Base):
    __tablename__ = "cars"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    permalink: Mapped[str]
