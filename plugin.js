CKEDITOR.plugins.add('ajaxsave',
    {
        init: function(ckeditor)
        {
            var pluginName = 'ajaxsave';
            ckeditor.addCommand( pluginName,
            {
                exec : function( ckeditor )
                {
                    $.post("tambahUlasan_proses.php", {
                        data : ckeditor.getSnapshot()
                    } );
                },
                canUndo : true
            });
            ckeditor.ui.addButton('Ajaxsave',
            {
                label: 'Save Ajax',
                command: pluginName,
                className : 'cke_button_save'
            });
        }
    });