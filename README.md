# dd-codeigniter
this is dump and die helper for codeigniter 
Save this to **application/helpers/** . We shall call it "new_helper.php"

The first line exists to make sure the file cannot be included and ran from outside the CodeIgniter scope. Everything after this is self explanatory.

# Using the Helper

`$this->load->helper('new_helper');
echo test_method('Hello World');`

If you use this helper in a lot of locations you can have it load automatically by adding it to the autoload configuration file i.e.` application\config\autoload.php`

`$autoload['helper'] = array('new_helper');`
