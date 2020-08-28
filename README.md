# Git wrapper around wordpress plugin

Since WordPress SVN is annoying to manage, The plugin lives as a public repository on our GitHub

[WordPress.org SVN repo](https://plugins.svn.wordpress.org/embedded-cdn/)

This is where the plugin lives to be searchable on WordPress.org (or through the plugin install back end)

The embedded-cdn folder in GitHub is what the trunk of this repository contains

## Updating

WordPress likes to make sure that plugins are tested with their latest version. This is defined in the [README line 6](https://github.com/CanadaHelps/embedded-cdn/blob/master/embedded-cdn/README.txt#L6).

Our plugin is pretty straight forward shortcode, which should not break with any WordPress release. Slap the latest version into `tested up to` version and publish

This tends to happen once a year as they start to de-list older plugins that they see are "unmaintained". Would be good to setup github actions to auto publish once this repo updates.

### Useful resources

to clone the repo locally [starting-a-new-plugin](https://developer.wordpress.org/plugins/wordpress-org/how-to-use-subversion/#starting-a-new-plugin)

to push a change to WordPress [editing-existing-files](https://developer.wordpress.org/plugins/wordpress-org/how-to-use-subversion/#editing-existing-files)

## Contributors

To add contributors to the plugin, include the WordPress.org username in README.txt under contributors (comma separated)

[https://github.com/CanadaHelps/embedded-cdn/blob/master/embedded-cdn/README.txt#L2](https://github.com/CanadaHelps/embedded-cdn/blob/master/embedded-cdn/README.txt#L2)

This is a bit of a chicken and the egg situation, so you would need to do this as the canadahelps user (credentials in KeePass)
