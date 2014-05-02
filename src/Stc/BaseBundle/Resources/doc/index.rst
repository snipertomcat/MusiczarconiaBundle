**NOTES**
/views:
    layout.html.twig : This is the main layout template that extends from the app/Resources/views/base.html.twig.
                       It imports the main css and javascript files for jquery and provides a <head> block and a
                       <content> block BUT the head block must be called from the child template using {{ parent() }}
                       to include.