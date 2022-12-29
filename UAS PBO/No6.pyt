# Single Responsibility Principle (S)
class User:
    def __init__(self, name, email):
        self.name = name
        self.email = email
    
    def get_name(self):
        return self.name
    
    def get_email(self):
        return self.email

# Open-Closed Principle (O)
class FileReader:
    def __init__(self, file_path):
        self.file_path = file_path
    
    def read_file(self):
        with open(self.file_path, 'r') as f:
            return f.read()

class CSVFileReader(FileReader):
    def read_file(self):
        data = super().read_file()
        return [row.split(',') for row in data.split('\n')]

# Liskov Substitution Principle (L)
class Rectangle:
    def __init__(self, width, height):
        self.width = width
        self.height = height
    
    def area(self):
        return self.width * self.height

class Square(Rectangle):
    def __init__(self, side):
        self.width = side
        self.height = side

# Interface Segregation Principle (I)
class Animal:
    def move(self):
        pass

class SeaHorse(Animal):
    def move(self):
        print("Swimming")

class Mosquito(Animal):
    def move(self):
        print("Flying")

class Komodo(Animal):
    def move(self):
        print("Crawling")

# Dependency Inversion Principle (D)
# low-level module
class Database:
    def save(self, data):
        pass

# high-level module
class UserService:
    def __init__(self, database):
        self.database = database

    def create_user(self, name):
        self.database.save({"name": name})

# using the high-level and low-level modules
database = Database()
user_service = UserService(database)
user_service.create_user("Alice")