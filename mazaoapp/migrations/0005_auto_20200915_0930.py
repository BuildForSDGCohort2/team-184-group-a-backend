# Generated by Django 3.0.5 on 2020-09-15 06:30

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('mazaoapp', '0004_auto_20200911_2145'),
    ]

    operations = [
        migrations.RenameField(
            model_name='farmer',
            old_name='picture',
            new_name='photo',
        ),
        migrations.RenameField(
            model_name='farmer',
            old_name='farmname',
            new_name='username',
        ),
    ]