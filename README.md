# Turiknox Hotjar

## Overview

A simple Magento 2 module that will add Hotjar tracking code to your web pages.

## Requirements

Magento 2.1.x

## Installation

Copy the contents of the module into your Magento root directory.

Enable the module via the command line:

/path/to/php bin/magento module:enable Turiknox_Hotjar

Run the database upgrade via the command line:

/path/to/php bin/magento setup:upgrade

Run the compile command and refresh the Magento cache:

/path/to/php bin/magento setup:di:compile

/path/to/php bin/magento cache:clean

## Usage

Stores -> Configuration -> Turiknox -> Hotjar

## Known Issues

After enabling the module within the Stores -> Configuration section, you may encounter the following console error on your web pages:

Uncaught DOMException: Failed to read the 'contentDocument' property from 'HTMLIFrameElement': Blocked a frame with origin "[yourdomain.com]" from accessing a cross-origin frame. 

This is a Magento bug, mentioned [here](https://github.com/magento/magento2/pull/8005). 

The fix should be included in upcoming releases.
