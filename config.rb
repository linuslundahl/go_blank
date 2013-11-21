# Require any additional compass plugins here.
# require 'breakpoint' # http://breakpoint-sass.com

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "stylesheets"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"
fonts_dir = "fonts"

# pngquant sprites from directory sprites/images
#
# on_sprite_saved do |filename|
#
#   unless filename.match(/^sprite/)
#
#     %x{png8 #{filename}}
#
#     # png8filename = filename.sub(/\.png/, '-fs8.png')
#     # %x{/usr/local/bin/pngquant #{filename}}
#     # %x{mv -f #{png8filename} #{filename}}
#
#     %x{terminal-notifier -message "Your sprite is done: #{filename}"} # requires terminal-notifier
#
#   end
#
# end

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :expanded

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
