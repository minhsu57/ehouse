/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
 
	// kcfinder
	// config.filebrowserBrowseUrl = public_url + '/kcfinder/browse.php?opener=ckeditor&type=files';
 //   	config.filebrowserImageBrowseUrl = public_url + '/kcfinder/browse.php?opener=ckeditor&type=images';
 //   	config.filebrowserFlashBrowseUrl = public_url + '/kcfinder/browse.php?opener=ckeditor&type=flash';
 //   	config.filebrowserUploadUrl = public_url + '/kcfinder/upload.php?opener=ckeditor&type=files';
 //  	config.filebrowserImageUploadUrl = public_url + '/kcfinder/upload.php?opener=ckeditor&type=images';
 //   	config.filebrowserFlashUploadUrl = public_url + '/kcfinder/upload.php?opener=ckeditor&type=flash';

   // ckfinder
   	config.filebrowserBrowseUrl = public_url + 'ckfinder/ckfinder.html';
   	config.filebrowserImageBrowseUrl = public_url + 'ckfinder/ckfinder.html?type=Images';
   	config.filebrowserFlashBrowseUrl = public_url + 'ckfinder/ckfinder.html?type=Flash';
   	config.filebrowserUploadUrl = public_url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
  	config.filebrowserImageUploadUrl = public_url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
   	config.filebrowserFlashUploadUrl = public_url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
