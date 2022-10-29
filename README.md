# MyPHP Readme Doc

## .htaccess file

- *.htaccess* is set up to direct all requests to *index.php*
- Routing functions in myphp/route/route.php may be used to route all requests accordingly

Include in index.php file:
~~
$ROOT = $_SERVER['DOCUMENT_ROOT'];
$Purl = purl($_SERVER['REQUEST_URI']);
~~

