//From: http://www.tinymce.com/tryit/menu_button.php

// Creates a new plugin class and a custom listbox
tinymce.create('tinymce.plugins.Ash_Sc', {
    
    createControl: function(n, cm) {
                switch (n) {
                        case 'Ash_Sc':
                                var c = cm.createMenuButton('Ash_Sc', {
                                        title : 'Shortcodes',
                                        image : '../wp-content/themes/X-Lab-Bootstrap/library/lib/shortcodes/icon.png',
                                        icons : false
                                });

                                c.onRenderMenu.add(function(c, m) {
                                        var sub;
                                        
                                        
                                        
                                                                                                                  
                                        
                                        
                                        
                                        sub = m.addMenu({title : 'LightBox'});

                                        sub.add({title : 'iFrame', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[lightbox_iframe url= width= height= title=] Link Title [/lightbox_iframe] ');
                                        }});
                                        
                                        sub.add({title : 'Youtube Video', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[lightbox_youtube id= title=] Link Title [/lightbox_youtube] ');
                                        }});
                                        
                                        sub.add({title : 'QuickTime Video', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[lightbox_qt url= width= height= title=] Link Title [/lightbox_qt] ');
                                        }});
                                        
                                        sub.add({title : 'Flash', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[lightbox_flash url= width= height= title=] Link Title [/lightbox_flash] ');
                                        }});
                                        
                                       
                                       
                                      
                                                                               
                            
                                        sub = m.addMenu({title : 'Buttons'});

                                        sub.add({title : 'Default Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDefaultLarge  url=http:// ] Button Text [/BtnDefaultLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Default', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDefault  url=http:// ] Button Text [/BtnDefault] ');
                                        }});
                                        
                                        sub.add({title : 'Default Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDefaultSmall  url=http:// ] Button Text [/BtnDefaultSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Default Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDefaultMini  url=http:// ] Button Text [/BtnDefaultMini] ');
                                        }});
                                        
                                        
                                        
                                        
                                        sub.add({title : 'Primary Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnPrimaryLarge  url=http:// ] Button Text [/BtnPrimaryLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Primary', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnPrimary  url=http:// ] Button Text [/BtnPrimary] ');
                                        }});
                                        
                                        sub.add({title : 'Primary Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnPrimarySmall  url=http:// ] Button Text [/BtnPrimarySmall] ');
                                        }});
                                        
                                        sub.add({title : 'Primary Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnPrimaryMini  url=http:// ] Button Text [/BtnPrimaryMini] ');
                                        }});                                    
										
										
										
										sub.add({title : 'Info Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInfoLarge  url=http:// ] Button Text [/BtnInfoLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Info', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInfo  url=http:// ] Button Text [/BtnInfo] ');
                                        }});
                                        
                                        sub.add({title : 'Info Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInfoSmall  url=http:// ] Button Text [/BtnInfoSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Info Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInfoMini  url=http:// ] Button Text [/BtnInfoMini] ');
                                        }}); 
                                        
                                        
                                        
                                        sub.add({title : 'Successful Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnSuccessfulLarge  url=http:// ] Button Text [/BtnSuccessfulLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Successful', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnSuccessful  url=http:// ] Button Text [/BtnSuccessful] ');
                                        }});
                                        
                                        sub.add({title : 'Successful Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnSuccessfulSmall  url=http:// ] Button Text [/BtnSuccessfulSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Successful Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnSuccessfulMini  url=http:// ] Button Text [/BtnSuccessfulMini] ');
                                        }}); 
                                        
                                        
                                        
                                        sub.add({title : 'Warning Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnWarningLarge  url=http:// ] Button Text [/BtnWarningLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Warning', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnWarning  url=http:// ] Button Text [/BtnWarning] ');
                                        }});
                                        
                                        sub.add({title : 'Warning Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnWarningSmall  url=http:// ] Button Text [/BtnWarningSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Warning Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnWarningMini  url=http:// ] Button Text [/BtnWarningMini] ');
                                        }}); 
                                        
                                        
                                        
                                         sub.add({title : 'Danger Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDangerLarge  url=http:// ] Button Text [/BtnDangerLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Danger', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDanger  url=http:// ] Button Text [/BtnDanger] ');
                                        }});
                                        
                                        sub.add({title : 'Danger Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDangerSmall  url=http:// ] Button Text [/BtnDangerSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Danger Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnDangerMini  url=http:// ] Button Text [/BtnDangerMini] ');
                                        }}); 
                                        
                                        
                                        
                                         sub.add({title : 'Inverse Large', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInverseLarge  url=http:// ] Button Text [/BtnInverseLarge] ');
                                        }});
                                        
                                        sub.add({title : 'Inverse', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInverse  url=http:// ] Button Text [/BtnInverse] ');
                                        }});
                                        
                                        sub.add({title : 'Inverse Small', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInverseSmall  url=http:// ] Button Text [/BtnInverseSmall] ');
                                        }});
                                        
                                        sub.add({title : 'Inverse Mini', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[BtnInverseMini  url=http:// ] Button Text [/BtnInverseMini] ');
                                        }}); 
										
                                        
                                        
 
 
 



                                        sub = m.addMenu({title : 'Columns'});

                                        sub.add({title : 'One Half', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_half] Content [/one_half] [one_half_last] Content [/one_half_last] ');
                                        }});

                                        sub.add({title : 'One Third', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_third] Content [/one_third] [one_third] Content [/one_third] [one_third_last] Content [/one_third_last] ');
                                        }});
                                        
                                        sub.add({title : 'One Fourth', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_fourth] Content [/one_fourth] [one_fourth] Content [/one_fourth] [one_fourth] Content [/one_fourth] [one_fourth_last] Content [/one_fourth_last] ' );
                                        }});
                                        
                                        sub.add({title : 'One Fifth', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_fifth] Content [/one_fifth] [one_fifth] Content [/one_fifth] [one_fifth] Content [/one_fifth] [one_fifth] Content [/one_fifth] [one_fifth_last] Content [/one_fifth_last] ');
                                        }});
                                        
                                        sub.add({title : 'Two Third & One Third', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[two_third] Content [/two_third] [one_third_last] Content [/one_third_last] ');
                                        }});
                                        
                                        sub.add({title : 'One Third & Two Third', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_third] Content [/one_third] [two_third_last] Content [/two_third_last] ');
                                        }});
                                        
                                        sub.add({title : 'Three Fourth & One Fourth', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[three_fourth] Content [/three_fourth] [one_fourth_last] Content [/one_fourth_last] ');
                                        }});
                                        
                                        sub.add({title : 'One Fourth & Three Fourth', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[one_fourth] Content [/one_fourth] [three_fourth_last] Content [/three_fourth_last] ');
                                        }});
                                        
                                        sub.add({title : 'Space Separator', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[space_separator] [/space_separator] ');
                                        }});
                                        
                                        
                                        
                                        
                                        sub = m.addMenu({title : 'Highlight Text'});

                                        sub.add({title : 'Green Highlight', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[highlight_green] Content [/highlight_green]');
                                        }});

                                        sub.add({title : 'Yellow Highlight', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[highlight_yellow] Content [/highlight_yellow]');
                                        }});
                                        
                                        sub.add({title : 'Red Highlight', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[highlight_red] Content [/highlight_red]');
                                        }});
                                        
                                        
                                        
                                        
                                        sub = m.addMenu({title : 'Format Text'});

                                        sub.add({title : 'Line Separator', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[separator_line]');
                                        }});

                                        sub.add({title : 'Dotted Separator', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[separator_dotted]');
                                        }});
                                        
                                        sub.add({title : 'Dashed Separator', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[separator_dashed]');
                                        }});
                                        
                                        
                                        
                                        
                                        sub = m.addMenu({title : 'Boxes'});

                                        sub.add({title : 'Alert Box', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[alert_box] Content [/alert_box]');
                                        }});

                                        sub.add({title : 'Success Box', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[success_box] Content [/success_box]');
                                        }});
                                        
                                        sub.add({title : 'Info Box', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[info_box] Content [/info_box]');
                                        }});
                                        
                                     
                                                                                
                                        
                                       
                                       
                                       
                                        sub = m.addMenu({title : 'Other'});

                                        sub.add({title : 'Members Only', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[member] This text will be only displayed to registered users. [/member] ');
                                        }});
                                        
                                         sub.add({title : 'Contact Form', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[contact email=YOUR_EMAIL_HERE]');
                                        }});
                                        
                                        
                                        
                                        
                                        sub = m.addMenu({title : 'ToolTips'});

                                        sub.add({title : 'Tip Dark - Display on Top', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[tip title=] The content [/tip] ');
                                        }});
                                        
                                        sub.add({title : 'Tip Dark - Display on Bottom', onclick : function() {
                                                tinyMCE.activeEditor.execCommand('mceInsertContent', false, 
                                                '[tip_bottom title=] The content [/tip_bottom] ');
                                        }});
                                      
                                        
                                       
                                       
                                       
                                });
                                
                                 
                                    
                                // Return the new menu button instance
                                return c;
                }

                return null;
        }
});
    
    
// Register plugin with a short name
tinymce.PluginManager.add('Ash_Sc', tinymce.plugins.Ash_Sc);