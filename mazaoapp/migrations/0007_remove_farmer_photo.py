# Generated by Django 3.0.5 on 2020-09-15 08:12

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('mazaoapp', '0006_auto_20200915_1055'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='farmer',
            name='photo',
        ),
    ]
