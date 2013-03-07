Cobalt Talon Website
--------------------------

## Summary

This is the (mostly) static website for Cobalt Talon.  It's a php site
that makes extensive use of partials.  All the content pages are located
in the pages directory.  The .htaccess file directs the request to the
proper file.  It basically works like this:

    /about redirects to pages/about.php

    /products/product1 would redirect to pages/products-product1.php


## Production

The site is hosted with godaddy.  [Git
ftp](https://github.com/resmo/git-ftp) has been used to deploy, but is
not required.  To deploy with git ftp (make sure to install first).
Make sure all changes are committed in git and run:

    git ftp push

Git access was given by [Fahad Abbas](fabbas@cobalttalon.com)


## Stylesheets

Stylesheets were compiled with [Compass](http://compass-style.org/) and
Sass.  Install compass with as a ruby gem:

    gem install compass

To edit stylesheets, run `compass watch` from the main repo root.  Then
edit scss files in `src` directory.  Stylesheets will be compiled in the
css directory. Git ftp ignores the `src` dir because the source isn't
needed in production. 


## Html 5 Boilerplate

This site was built on the
[html5boilerplace.com](http://html5boilerplate.com/) framework.  It did
now use the site build tools.


## Contact

Feel free to contact me with any questions: jess@brownwebdesign.com
