from django.shortcuts import render
from rest_framework.parsers import JSONParser
from django.http import HttpResponse, JsonResponse
from rest_framework import viewsets
from .models import Farmer
from .serializer import FarmerSerializer
from rest_framework import generics

# Create your views here.
class FarmerViewsetModel(viewsets.ModelViewSet):
    serializer_class = FarmerSerializer
    queryset = Farmer.objects.all()