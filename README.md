# Google Analytics for SilverStripe

A very simple way of adding Google Analytics code with just using yml configuration

## Requirements

SilverStripe 4.1

## Installation

`composer require jinjie/ganalytics`

## Usage

Add the following in `mysite.yml` (replace tracking_id) to your own:

```yml
SwiftDevLabs\GoogleAnalytics\Extensions\ContentControllerExtension:
  tracking_id: XX-12345678-9
```