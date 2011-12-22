#Agenda
#Agenda
Cet agenda a été réalisé dans le cadre d'un tutoriel d'apprentissage pour FuelPHP.

http://www.novius-labs.com

Installation par git

* git clone git://github.com/sdrdis/Agenda.git
* git submodule init
* git submodule pull

Si vous installez cet agenda dans un système UNIX, vous pourriez avoir besoin de modifier les droits de certains fichiers.

Enfin, n'oubliez pas de modifier la configuration et migrer la base de données (php oil refine migrate). 

#FuelPHP

* [Website](http://fuelphp.com/)
* [Documentation](http://docs.fuelphp.com) and in its own [git repo](https://github.com/fuel/docs)
* [Forums](http://fuelphp.com/forums) for comments, discussion and community support
* Version: 1.1

## Description

Fuel is a fast, lightweight PHP 5.3 framework. In an age where frameworks are a dime a dozen, We believe that Fuel will stand out in the crowd.  It will do this by combining all the things you love about the great frameworks out there, while getting rid of the bad.

##Development Team

* Dan Horrigan - Lead Developer ([http://dhorrigan.com](http://dhorrigan.com))
* Jelmer Schreuder - Senior Developer ([http://jelmerschreuder.nl/](http://jelmerschreuder.nl/))
* Phil Sturgeon - Developer ([http://philsturgeon.co.uk](http://philsturgeon.co.uk))
* Harro Verton - Developer ([http://wanwizard.eu/](http://wanwizard.eu/))
* Frank de Jonge - Developer ([http://frenky.net/](http://frenky.net/))

##Downloading FuelPHP

Since Fuel uses Submodules and since GitHub Downloads don't support submodules, do not download Fuel using the Downloads link here.

We will be putting a "Download" section on <http://fuelphp.com> soon.

##Cloning Fuel

FuelPHP uses submodules for things like the **core** folder.  After you clone the repository you will need to init and update the submodules.

Here is the basic usage:

    git clone --recursive git://github.com/fuel/fuel.git

The above command is the same as running:

    git clone git://github.com/fuel/fuel.git
    cd fuel/
    git submodule init
    git submodule update

You can also shorten the last two commands to one:

    git submodule update --init

##Donate

[Donate Here](http://www.pledgie.com/campaigns/14124)

Any donations would help support the framework and pay for software, development and hosting costs. We understand if you cannot, but greatly appreciate anything you can give.
