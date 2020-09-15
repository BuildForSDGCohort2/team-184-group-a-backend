
from django.urls import path, include
from .views import FarmerViewsetModel
from rest_framework.routers import DefaultRouter
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf.urls.static import static
from django.conf import settings


router= DefaultRouter()
router.register('Farmers',FarmerViewsetModel, basename='modelling')

urlpatterns = [
   
      path('viewsModel/', include(router.urls)),
   
]
