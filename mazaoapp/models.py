from django.db import models

# Create your models here.
class Farmer(models.Model):
    firstname = models.CharField(max_length=100)
    lastname = models.CharField(max_length=100)
    username = models.CharField(max_length=100)
    location = models.CharField(max_length=100)
    address = models.CharField(max_length=100)
    phone = models.CharField(max_length=100)
    email = models.EmailField(max_length=100)
    photo = models.ImageField(default='default.png', blank=True)
    date= models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.firstname

class products(models.Model):
    productname = models.CharField(max_length=100)