Harbingernews::Application.routes.draw do

  root :to => "home#index"
  
  mount RailsAdmin::Engine => '/admin', :as => 'rails_admin'

  mount Rich::Engine => '/rich', :as => 'rich'

  devise_for :users, :skip => [:sessions] 

  devise_scope :user do
    get "login" => "devise/sessions#new"
    get "signin" => "devise/sessions#new"
    post 'login' => 'devise/sessions#create', :as => :user_session
    get "signup" => "devise/registrations#new", :as => :new_user_registration
    get 'signout' => 'devise/sessions#destroy', :as => :destroy_user_session
  end
  get "/users/:id" => "users#show"
  get "/users/:id/edit" => "users#edit"
  put "/users/:id" => "users#update"
  resources :users

  resources :upcoming_events

  resources :recent_events

  # Announcements
  resources :announcements
  
  # Memos
  resources :memos

  # Mostly static pages
  get '/about', to: 'static_pages#about'
  get '/get_involved', to: "static_pages#get_involved"
  get '/harbingerteam', to: "static_pages#harbingerteam"
  get '/error404', to: "static_pages#404"
  get '/error500', to: "static_pages#500"
  get '/error422', to: "static_pages#422"

  # Sports Pages
  get '/sports/:slug',           to: "sports#show" # Show the sports pages by name (slug) not id
  get '/sports/:slug/edit',      to: "sports#edit" # Allows the edit pages to work with the same
  put '/sports/:slug',           to: 'sports#update'
  resources :sports, only: [:index, :new, :create, :destroy]
  
  # Clubs Pages
  get '/clubs/:slug',            to: 'clubs#show'
  get '/clubs/:slug/edit',       to: 'clubs#edit'
  put '/clubs/:slug',            to: 'clubs#update'
  resources :clubs,  only: [:index, :new, :create, :destroy]
  
  # Bus Server Service
  match '/buses/map', to: "buses#map"
  resources :buses

  # Custom Error Pages
  unless Rails.application.config.consider_all_requests_local
    match '*not_found', to: 'errors#error_404'
  end

  post    '/favorites' => 'favorites#create'
  delete  '/favorites' => 'favorites#destroy'
  get     '/favorites' => 'favorites#list'
  
end

# This was a triumph. 
# I'm making a note here: 
# Huge success. 
# It's hard to overstate 
# my satisfaction. 

#            Aperture Science.
#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.

# We do what we must, 
# because we can.
# For the good of all of us. 

#              =+$HM####@H%;,
#           /H###############M$,
#           ,@################+
#            .H##############+
#              X############/
#               $##########/
#                %########/
#                 /X/;;+X/
 
#                  -XHHX-
#                 ,######,
# #############X  .M####M.  X#############
# ##############-   -//-   -##############
# X##############%,      ,+##############X
# -##############X        X##############-
#  %############%          %############%
#   %##########;            ;##########%
#    ;#######M=              =M#######;
#     .+M###@,                ,@###M+.
#        :XH.                  .HX:

# Except the ones who are dead.

#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.

# But there's no sense crying 
# over every mistake. 
# You just keep on trying 
# till you run out of cake.

#                  =/;;/-
#                 +:    //
#                /;      /;
#               -X        H.
# .//;;;:;;-,   X=        :+   .-;:=;:;%;.
# M-       ,=;;;#:,      ,:#;;:=,       ,@
# :%           :%.=/++++/=.$=           %=
#  ,%;         %/:+/;,,/++:+/         ;+.
#    ,+/.    ,;@+,        ,%H;,    ,/+,
#       ;+;;/= @.  .H##X   -X :///+;
#       ;+=;;;.@,  .XM@$.  =X.//;=%/.
#    ,;:      :@%=        =$H:     .+%-
#  ,%=         %;-///==///-//         =%,
# ;+           :%-;;;:;;;;-X-           +:
# @-      .-;;;;M-        =M/;;;-.      -X
#  :;;::;;-.    %-        :+    ,-;;-;:==
#               ,X        H.
#                ;/      %=
#                 //    +;
#                  ,////,

# And the science gets done. 
# And you make a neat gun. 

#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.


# For the people who are 
# still alive. 

# I'm not even angry. 
# I'm being so sincere right now. 

# Even though you broke my heart. 

#                           .,---.
#                         ,/XM#MMMX;,
#                       -%##########M%,
#                      -@######%  $###@=
#       .,--,         -H#######$   $###M:
#    ,;$M###MMX;     .;##########$;HM###X=
#  ,/@##########H=      ;################+
# -+#############M/,      %##############+
# %M###############=      /##############:
# H################      .M#############;.
# @###############M      ,@###########M:.
# X################,      -$=X#######@:
# /@##################%-     +######$-
# .;##################X     .X#####+,
#  .;H################/     -X####+.
#    ,;X##############,       .MM/
#       ,:+$H@M#######M#$-    .$$=
#            .,-=;+$@###X:    ;/=.
#                   .,/X$;   .::,
#                       .,    ..

# And killed me.

#             .+
#              /M;
#               H#@:              ;,
#               -###H-          -@/
#                %####$.  -;  .%#X
#                 M#####+;#H :M#M.
# ..          .+/;%#########X###-
#  -/%H%+;-,    +##############/
#     .:$M###MH$%+############X  ,--=;-
#         -/H#####################H+=.
#            .+#################X.
#          =%M####################H;.
#             /@###############+;;/%%;,
#          -%###################$.
#        ;H######################M=
#     ,%#####MH$%;+#####M###-/@####%
#   :$H%+;=-      -####X.,H#   -+M##@-
#  .              ,###;    ;      =$##+
#                 .#H,               :XH,
#                  +                   .;-

# And tore me to pieces.

#                      -$-
#                     .H##H,
#                    +######+
#                 .+#########H.
#               -$############@.
#             =H###############@  -X:
#           .$##################:  @#@-
#      ,;  .M###################;  H###;
#    ;@#:  @###################@  ,#####:
#  -M###.  M#################@.  ;######H
#  M####-  +###############$   =@#######X
#  H####$   -M###########+   :#########M,
#   /####X-   =########%   :M########@/.
#     ,;%H@X;   .$###X   :##MM@%+;:-
#                  ..
#   -/;:-,.              ,,-==+M########H
#  -##################@HX%%+%%$%%%+:,,
#     .-/H%%%+%%$H@###############M@+=:/+:
# /XHX%:#####MH%=    ,---:;;;;/%%XHM,:###$
# $@#MX %+;-        

# And threw every piece into a fire.
# As they burned it hurt because 

#                                      :X-
#                                   :X###
#                                 ;@####@
#                               ;M######X
#                             -@########$
#                           .$##########@
#                          =M############-
#                         +##############$
#                       .H############$=.
#          ,/:         ,M##########M;.
#       -+@###;       =##########M;
#    =%M#######;     :#########M/
# -$M###########;   :#########/
#  ,;X###########; =########$.
#      ;H#########+#######M=
#        ,+##############+
#           /M#########@-
#             ;M######%
#               +####:
#                ,$M-

# I was so happy for you!
# Now these points of data 
# make a beautiful line. 
# And we're out of beta. 
# We're releasing on time.

#             .+
#              /M;
#               H#@:              ;,
#               -###H-          -@/
#                %####$.  -;  .%#X
#                 M#####+;#H :M#M.
# ..          .+/;%#########X###-
#  -/%H%+;-,    +##############/
#     .:$M###MH$%+############X  ,--=;-
#         -/H#####################H+=.
#            .+#################X.
#          =%M####################H;.
#             /@###############+;;/%%;,
#          -%###################$.
#        ;H######################M=
#     ,%#####MH$%;+#####M###-/@####%
#   :$H%+;=-      -####X.,H#   -+M##@-
#  .              ,###;    ;      =$##+
#                 .#H,               :XH,
#                  +                   .;-

# So I'm GLad I got burned. 

#                  =/;;/-
#                 +:    //
#                /;      /;
#               -X        H.
# .//;;;:;;-,   X=        :+   .-;:=;:;%;.
# M-       ,=;;;#:,      ,:#;;:=,       ,@
# :%           :%.=/++++/=.$=           %=
#  ,%;         %/:+/;,,/++:+/         ;+.
#    ,+/.    ,;@+,        ,%H;,    ,/+,
#       ;+;;/= @.  .H##X   -X :///+;
#       ;+=;;;.@,  .XM@$.  =X.//;=%/.
#    ,;:      :@%=        =$H:     .+%-
#  ,%=         %;-///==///-//         =%,
# ;+           :%-;;;:;;;;-X-           +:
# @-      .-;;;;M-        =M/;;;-.      -X
#  :;;::;;-.    %-        :+    ,-;;-;:==
#               ,X        H.
#                ;/      %=
#                 //    +;
#                  ,////,

# Think of all the things we learned

#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.

# For the people who are still alive.

# Go ahead and leave me. 
# I think I prefer to stay inside. 
# Maybe you'll find someone else 
# to help you. 

#            .-;+$XHHHHHHX$+;-.
#         ,;X@@X%/;=----=:/%X@@X/,
#       =$@@%=.              .=+H@X:
#     -XMX:                      =XMX=
#    /@@:                          =H@+
#   %@X,                            .$@$
#  +@X.                               $@%
# -@@,                                .@@=
# %@%                                  +@$
# H@:                                  :@H
# H@:         :HHHHHHHHHHHHHHHHHHX,    =@H          
# %@%         ;@M@@@@@@@@@@@@@@@@@H-   +@$
# =@@,        :@@@@@@@@@@@@@@@@@@@@@= .@@:
#  +@X        :@@@@@@@@@@@@@@@M@@@@@@:%@%
#   $@$,      ;@@@@@@@@@@@@@@@@@M@@@@@@$.
#    +@@HHHHHHH@@@@@@@@@@@@@@@@@@@@@@@+
#     =X@@@@@@@@@@@@@@@@@@@@@@@@@@@@X=
#       :$@@@@@@@@@@@@@@@@@@@M@@@@$:
#         ,;$@@@@@@@@@@@@@@@@@@X/-
#            .-;+$XXHHHHHX$+;-.

# Maybe Black Mesa.
# That was a joke, ha ha, fat chance. 

#             ,:/+/-
#             /M/              .,-=;//;-
#        .:/= ;MH/,    ,=/+%$XH@MM#@:
#       -$##@+$###@H@MMM#######H:.    -/H#
#  .,H@H@ X######@ -H#####@+-     -+H###@X
#   .,@##H;      +XM##M/,     =%@###@X;-
# X%-  :M##########$.    .:%M###@%:
# M##H,   +H@@@$/-.  ,;$M###@%,          -
# M####M=,,---,.-%%H####M$:          ,+@##
# @##################@/.         :%H##@$-
# M###############H,         ;HM##M$=
# #################.    .=$M##M$=
# ################H..;XM##M$=          .:+
# M###################@%=           =+@MH%
# @################M/.          =+H#X%=
# =+M##############M,       -/X#X+;.
#   .;XM##########H=    ,/X#H+:,
#      .=+HM######M+/+HM@+=.
#          ,:/%XM####H/.
#               ,.:=-.

# Anyway this cake is great. 
# Its so delicious and moist.

#        #+ @      # #              M#@
#  .    .X  X.%##@;# #   +@#######X. @#%
#    ,==.   ,######M+  -#####%M####M-    #
#   :H##M%:=##+ .M##M,;#####/+#######% ,M#
#  .M########=  =@#@.=#####M=M#######=  X#
#  :@@MMM##M.  -##M.,#######M#######. =  M
#              @##..###:.    .H####. @@ X,
#    ############: ###,/####;  /##= @#. M
#            ,M## ;##,@#M;/M#M  @# X#% X#
# .%=   ######M## ##.M#:   ./#M ,M #M ,#$
# ##/         $## #+;#: #### ;#/ M M- @# :
# #+ #M@MM###M-;M #:$#-##$H# .#X @ + $#. #
#       ######/.: #%=# M#:MM./#.-#  @#: H#
# +,.=   @###: /@ %#,@  ##@X #,-#@.##% .@#
# #####+;/##/ @##  @#,+       /#M    . X,
#    ;###M#@ M###H .#M-     ,##M  ;@@; ###
#    .M#M##H ;####X ,@#######M/ -M###$  -H
#     .M###%  X####H  .@@MM@;  ;@#M@
#       H#M    /@####/      ,++.  / ==-,
#                ,=/:, .+X@MMH@#H  #####$=

# Look at me still talking 

#              =+$HM####@H%;,
#           /H###############M$,
#           ,@################+
#            .H##############+
#              X############/
#               $##########/
#                %########/
#                 /X/;;+X/
 
#                  -XHHX-
#                 ,######,
# #############X  .M####M.  X#############
# ##############-   -//-   -##############
# X##############%,      ,+##############X
# -##############X        X##############-
#  %############%          %############%
#   %##########;            ;##########%
#    ;#######M=              =M#######;
#     .+M###@,                ,@###M+.
#        :XH.                  .HX:

# When there's science to do.
# When I look out there

#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.

# it makes me GLaD I'm not you. 

#                  =/;;/-
#                 +:    //
#                /;      /;
#               -X        H.
# .//;;;:;;-,   X=        :+   .-;:=;:;%;.
# M-       ,=;;;#:,      ,:#;;:=,       ,@
# :%           :%.=/++++/=.$=           %=
#  ,%;         %/:+/;,,/++:+/         ;+.
#    ,+/.    ,;@+,        ,%H;,    ,/+,
#       ;+;;/= @.  .H##X   -X :///+;
#       ;+=;;;.@,  .XM@$.  =X.//;=%/.
#    ,;:      :@%=        =$H:     .+%-
#  ,%=         %;-///==///-//         =%,
# ;+           :%-;;;:;;;;-X-           +:
# @-      .-;;;;M-        =M/;;;-.      -X
#  :;;::;;-.    %-        :+    ,-;;-;:==
#               ,X        H.
#                ;/      %=
#                 //    +;
#                  ,////,

# I've experiments to run 

#             .+
#              /M;
#               H#@:              ;,
#               -###H-          -@/
#                %####$.  -;  .%#X
#                 M#####+;#H :M#M.
# ..          .+/;%#########X###-
#  -/%H%+;-,    +##############/
#     .:$M###MH$%+############X  ,--=;-
#         -/H#####################H+=.
#            .+#################X.
#          =%M####################H;.
#             /@###############+;;/%%;,
#          -%###################$.
#        ;H######################M=
#     ,%#####MH$%;+#####M###-/@####%
#   :$H%+;=-      -####X.,H#   -+M##@-
#  .              ,###;    ;      =$##+
#                 .#H,               :XH,
#                  +                   .;-

# There is research to be done

#              .,-:;//;:=,
#           . :H@@@MM@M#H/.,+%;,
#        ,/X+ +M@@M@MM%=,-%HMMM@X/,
#      -+@MM; $M@@MH+-,;XMMMM@MMMM@+-
#     ;@M@@M- XM@X;. -+XXXXXHHH@M@M#@/.
#   ,%MM@@MH ,@%=            .---=-=:=,.
#   =@#@@@MX .,              -%HX$$%%%+;
#  =-./@M@M$                  .;@MMMM@MM:
#  X@/ -$MM/                    .+MM@@@M$
# ,@M@H: :@:                    . =X#@@@@-
# ,@@@MMX, .                    /H- ;@M@M=
# .H@@@@M@+,                    %MM+..%#$.
#  /MMMM@MMH/.                  XM@MH; =;
#   /%+%$XHH@$=              , .H@@@@MX,
#    .=--------.           -%H.,@@@@@MX,
#    .%MM@@@HHHXX$$$%+- .:$MMX =M@@MM%.
#      =XMMM@MM@MM#H;,-+HMM@M+ /MMMX=
#        =%@M@M#@$-.=$@MM@@@M; %M%=
#          ,:+$+-,/H#MMMMMMM@= =,
#                =++%%%%+/:-.

# On the people who are still alive.
# Believe me, I am still alive. 
# I'm doing science and I'm still alive. 
# I feel fantastic and I'm still alive. 
# While you're dying I'll be still alive 
# and when your dead I will be still alive. 
# Still alive. 
# Still alive.
