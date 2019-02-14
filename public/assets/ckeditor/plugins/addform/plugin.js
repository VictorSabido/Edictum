// Register the plugin within the editor.
CKEDITOR.plugins.add( 'addform', {

	// Register the icons. They must match command names.
	icons: 'addform',

	// The plugin initialization logic goes inside this method.
	init: function( editor ) {

		// Define the editor command that inserts a timestamp.
		editor.addCommand( 'insertAddform', {

			// Define the function that will be fired when the command is executed.
			exec: function( editor ) {
				var now = new Date();

				// Insert the timestamp into the document.
				editor.insertHtml( '---- **** FORUMULARIO **** ----' );
			}
		});

		// Create the toolbar button that executes the above command.
		editor.ui.addButton( 'Addform', {
			label: 'Insert Addform',
			command: 'insertAddform',
			toolbar: 'insert'
		});
	}
});