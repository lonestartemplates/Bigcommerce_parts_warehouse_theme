Bigcommerce Template Customization
----------------------------------

*** IMPORTANT ***

To learn everything you need to know to customize your store,
please read the template customization guide here:
 http://www.bigcommerce.com/pdf/Big_Commerce_Template_Guide_1.0.pdf

At Bigcommerce, we believe you should have the ability
to fully customize the appearance of your store. For this
reason, we're allowing FTP access to a special directory
that allows you to apply any template customizations you
may require.

You'll notice that these directories are rather empty.
This is because your store is currently inheriting all of
the templates from our master and default templates. Your
customized template too, need only contain the files that
you wish to customize for your store.

To get started, we've made it easy for you to grab a ZIP
archive of all of the template files that are currently
in use on your store. This includes copies of the master
template files too. You can download this ZIP file by
logging in to the control panel, clicking "Store Designs"
in the top menu and then clicking "Download Template Files".

Any files you upload via FTP are accessible at:
 http://yourstore.address/template/

Designs are organized in to different folders:
---
* The root folder contains all of the "layout" files. These
files simply define the structure of core pages such as the
home, cart and product pages. They contain references to
panel files (described below) that should be shown on the
pages.

* The Emails/ folder contains all of the email messages that
are sent out from your store.

* The Panels/ folder contains all of the panel files that
make up your store. You can think of a panel as being an
individual block on the page (such as the featured products
list, the product reviews list or the category list).

* The Snippets/ folder contains all of the snippets that are
used by panels in your store. Snippets are short template
files that are included in regions of content that are
repeated (for example, there's a snippet for the layout of a
single product in the featured products list, and another
snippet that defines how a single category in the category
list looks)

* The Styles/ folder contains all of the CSS stylesheets that
are applied throughout your store. Additionally you'll notice
a file called "custom.css" in this directory. If you simply
need to make a few small CSS tweaks/modifications to our
existing CSS, you can make the changes in this file and it'll
automatically be included in your store.

* If an images/ folder exists in your custom template
directory, Bigcommerce will then load all of the images for
your store design from this directory instead of our default
template images. Important care must be taken that ALL images
are uploaded to this folder as this action causes ALL images
to be loaded from this directory.

Customizing Template Files
---
If you wish to customize a particular template file on your
store, it's a simple process.

1. Find the file that you'd like to begin customizing or make
changes to in the template ZIP file you downloaded above.

2. Open the file in your text or HTML editor of choice and
make the modifications you'd like to make. Save the changes
once complete.

3. Upload that particular file to the corresponding directory
via FTP. For example, if you're customizing a file in the root
directory called "product.html", you'd upload it to your root
directory via FTP. If you were editing "ProductDetails.html" in
the "Panels" directory, you'd upload it to the "Panels"
directory on the FTP server.

4. Your store will begin using this file instead of our default
file for the appropriate page/section.

Maintaining Modified Templates
---
From time to time, when you choose to upgrade your store to a
new Bigcommerce version, you may need to re-apply your
template customizations for portions of your store to continue
to work correctly or have access to new features.

Available shortly, we'll have a template differences tool that
allows you to view the changes you've made to your template and
also revert the file to our default.