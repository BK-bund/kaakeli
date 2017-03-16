# kaakeli

## How to install

#### Clone repro

    git clone https://github.com/BK-bund/kaakeli.git wp-content/themes/kaakeli

#### Install Bootstrap

	curl -O https://github.com/twbs/bootstrap/releases/download/v3.3.7/bootstrap-3.3.7-dist.zip
    unzip bootstrap-3.3.7-dist.zip -d wp-content/themes/kaakeli/

#### Install fonts

	cp /path/to/fonts/ wp-content/themes/kaakeli/fonts/

#### Install jQuery

	curl https://code.jquery.com/jquery-3.1.1.min.js --create-dirs -o wp-content/themes/kaakeli/jquery/jquery.min.js

#### Customise your theme
* Provide a `style.css` with `Template: kaakeli` in the header
* Provide a `functions.php` and import your stylesheed via `wp_enqueue_style()`
