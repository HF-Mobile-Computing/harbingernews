Harbingernews::Application.routes.draw do

  devise_for :users, :skip => [:sessions] 

  devise_scope :user do
    get "login" => "devise/sessions#new"
    post 'login' => 'devise/sessions#create', :as => :user_session
    get "signup" => "devise/registrations#new", :as => :new_user_registration
    get 'signout' => 'devise/sessions#destroy', :as => :destroy_user_session
  end

  # set root path
  root :to => "home#index"

  # Announcements
  resources :announcements
  
  # Memos
  resources :memos

  # Mostly static pages
  get '/about', to: 'static_pages#about'
  get '/get_involved', to: "static_pages#get_involved"

  # Sports Pages
  get '/sports/:slug', to: "sports#show" # Show the sports pages by name (slug) not id
  get '/sports/:slug/edit', to: "sports#edit" # Allows the edit pages to work with the same
  put '/sports/:slug', to: 'sports#update'
  resources :sports, only: [:index, :new, :create, :destroy]
  
  # Clubs Pages
  match '/clubs/new', to: "clubs#new"
  match '/clubs/:id', to: "clubs#show"
  match '/clubs/:id/edit', to: "clubs#edit"
  resources :clubs
  
  # User pages  resources :sessions, only: [:new, :create, :destroy]

  
  
  # The priority is based upon order of creation:
  # first created -> highest priority.

  # Sample of regular route:
  #   match 'products/:id' => 'catalog#view'
  # Keep in mind you can assign values other than :controller and :action

  # Sample of named route:
  #   match 'products/:id/purchase' => 'catalog#purchase', :as => :purchase
  # This route can be invoked with purchase_url(:id => product.id)

  # Sample resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Sample resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Sample resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Sample resource route with more complex sub-resources
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', :on => :collection
  #     end
  #   end

  # Sample resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end

  # You can have the root of your site routed with "root"
  # just remember to delete public/index.html.
  # root :to => 'welcome#index'

  # See how all your routes lay out with "rake routes"

  # This is a legacy wild controller route that's not recommended for RESTful applications.
  # Note: This route will make all actions in every controller accessible via GET requests.
  # match ':controller(/:action(/:id))(.:format)'
end
#== Route Map
# Generated on 27 Mar 2013 23:38
#
#        about        /about(.:format)             static_pages#about
# get_involved        /get_involved(.:format)      static_pages#get_involved
#    users_new GET    /users/new(.:format)         users#new
#                     /sports/:slug(.:format)      sports#show
#                     /sports/:slug/edit(.:format) sports#edit
#       sports GET    /sports(.:format)            sports#index
#              POST   /sports(.:format)            sports#create
#    new_sport GET    /sports/new(.:format)        sports#new
#   edit_sport GET    /sports/:id/edit(.:format)   sports#edit
#        sport GET    /sports/:id(.:format)        sports#show
#              PUT    /sports/:id(.:format)        sports#update
#              DELETE /sports/:id(.:format)        sports#destroy
