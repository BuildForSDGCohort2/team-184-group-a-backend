# Generated by Django 3.0.5 on 2020-09-11 18:45

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('mazaoapp', '0003_auto_20200911_2029'),
    ]

    operations = [
        migrations.AddField(
            model_name='farmer',
            name='picture',
            field=models.ImageField(blank=True, null=True, upload_to=''),
        ),
        migrations.AlterField(
            model_name='farmer',
            name='phone',
            field=models.CharField(max_length=100),
        ),
    ]
