# dd-codeigniter
this is dump and die helper for codeigniter 
Save this to **application/helpers/** . We shall call it "dd_helper.php"

The first line exists to make sure the file cannot be included and run from outside the CodeIgniter scope. Everything after this is self explanatory.

# Using the Helper

`$this->load->helper('dd');
echo dd("data here");`

If you use this helper in a lot of locations you can have it load automatically by adding it to the autoload configuration file i.e.` application\config\autoload.php`

`$autoload['helper'] = array('dd');`
