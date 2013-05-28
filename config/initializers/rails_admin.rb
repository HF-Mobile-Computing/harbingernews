# RailsAdmin config file. Generated on April 30, 2013 18:28
# See github.com/sferik/rails_admin for more informations

RailsAdmin.config do |config|


  ################  Global configuration  ################
  config.authorize_with :cancan
  # Set the admin name here (optional second array element will appear in red). For example:
  config.main_app_name = ['Harbinger News', 'Admin']
  # or for a more dynamic name:
  # config.main_app_name = Proc.new { |controller| [Rails.application.engine_name.titleize, controller.params['action'].titleize] }

  # RailsAdmin may need a way to know who the current user is]
  config.current_user_method { current_user } # auto-generated

  # If you want to track changes on your models:
  # config.audit_with :history, 'User'

  # Or with a PaperTrail: (you need to install it first)
  config.audit_with :paper_trail, 'User'

  # Display empty fields in show views:
  # config.compact_show_view = false

  # Number of default rows per-page:
  # config.default_items_per_page = 20

  # Exclude specific models (keep the others):
  config.excluded_models = ['Favorite']

  # Include specific models (exclude the others):
  # config.included_models = ['Announcement', 'Bus', 'Club', 'Memo', 'RecentEvent', 'Sport', 'UpcomingEvent', 'User']

  # Label methods for model instances:
  # config.label_methods << :description # Default is [:name, :title]
  
  ### Configurations
  
  # Sports
  config.model Sport do
    edit do
      field :title
      field :season, :enum do
        enum do
          ['spring', 'winter', 'fall']
        end
      end
      field :banner do
        label "Banner Image"
        help  "Note: Banner Image should be 852px by 170px. It will get resized to those dimensions on upload, but to avoid distortion, please upload it at as close to that size as possible."
      end
      # Add Rick to Sports Content
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end
  
  # Games
  config.model Game do
    edit do
      field :sport
      field :date
      field :time
      field :opponent
      field :is_home
      field :score
      field :status, :enum do
        enum do
          ['win', 'loss']
        end
      end
    end
  end
  
  # Clubs
  config.model Club do
    edit do
      field :name
      field :category
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end
  
  # Announcements
  config.model Announcement do
    edit do
      field :a_or_b, :enum do
        enum do
          ['A', 'B']
        end
      end
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end
  
  # Memos
  config.model Memo do
    edit do
      field :title
      field :bg_color, :color
      field :text_color, :color
      # field :is_image
      # field :image_path
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end
  
  # Recent Events
  config.model RecentEvent do
    edit do
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end
  
  # Upcoming Events
  config.model UpcomingEvent do
    edit do
      field :content, :rich_editor do
        config({
          :insert_many => true
        })
      end
    end
  end

  # Users
  config.model User do
    edit do
      field :name
      field :email
      field :roles, :enum do
        enum do
          [ ["Admin", :admin], ["Editor", :editor], ["Secretary", :secretary] ]
        end
      end
      field :teacher
      field :password
      field :password_confirmation
      field :avatar
    end
    configure :favorites do
      hide
      filterable false
      searchable false
    end
  end
  


  ################  Model configuration  ################

  # Each model configuration can alternatively:
  #   - stay here in a `config.model 'ModelName' do ... end` block
  #   - go in the model definition file in a `rails_admin do ... end` block

  # This is your choice to make:
  #   - This initializer is loaded once at startup (modifications will show up when restarting the application) but all RailsAdmin configuration would stay in one place.
  #   - Models are reloaded at each request in development mode (when modified), which may smooth your RailsAdmin development workflow.


  # Now you probably need to tour the wiki a bit: https://github.com/sferik/rails_admin/wiki
  # Anyway, here is how RailsAdmin saw your application's models when you ran the initializer:



  ###  Announcement  ###

  # config.model 'Announcement' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your announcement.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :a_or_b, :string 
  #     configure :content, :text 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  Bus  ###

  # config.model 'Bus' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your bus.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 
  #     configure :date, :string 
  #     configure :one, :string 
  #     configure :two, :string 
  #     configure :three, :string 
  #     configure :four, :string 
  #     configure :five, :string 
  #     configure :six, :string 
  #     configure :seven, :string 
  #     configure :eight, :string 
  #     configure :nine, :string 
  #     configure :ten, :string 
  #     configure :eleven, :string 
  #     configure :twelve, :string 
  #     configure :thirteen, :string 
  #     configure :fourteen, :string 
  #     configure :fifteen, :string 
  #     configure :sixteen, :string 
  #     configure :seventeen, :string 
  #     configure :eighteen, :string 
  #     configure :nineteen, :string 
  #     configure :twenty, :string 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  Club  ###

  # config.model 'Club' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your club.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :slug, :string 
  #     configure :name, :string 
  #     configure :category, :string 
  #     configure :content, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  Memo  ###

  # config.model 'Memo' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your memo.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :title, :string 
  #     configure :content, :string 
  #     configure :bg_color, :string 
  #     configure :is_image, :boolean 
  #     configure :image_path, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 
  #     configure :text_color, :string 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  RecentEvent  ###

  # config.model 'RecentEvent' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your recent_event.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :content, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  Sport  ###

  # config.model 'Sport' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your sport.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :slug, :string 
  #     configure :title, :string 
  #     configure :content, :text 
  #     configure :season, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 
  #     configure :alert, :text 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  UpcomingEvent  ###

  # config.model 'UpcomingEvent' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your upcoming_event.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :content, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end


  ###  User  ###

  # config.model 'User' do

  #   # You can copy this to a 'rails_admin do ... end' block inside your user.rb model definition

  #   # Found associations:



  #   # Found columns:

  #     configure :id, :integer 
  #     configure :email, :string 
  #     configure :password, :password         # Hidden 
  #     configure :password_confirmation, :password         # Hidden 
  #     configure :reset_password_token, :string         # Hidden 
  #     configure :name, :string 
  #     configure :reset_password_sent_at, :datetime 
  #     configure :remember_created_at, :datetime 
  #     configure :sign_in_count, :integer 
  #     configure :current_sign_in_at, :datetime 
  #     configure :last_sign_in_at, :datetime 
  #     configure :current_sign_in_ip, :string 
  #     configure :last_sign_in_ip, :string 
  #     configure :created_at, :datetime 
  #     configure :updated_at, :datetime 
  #     configure :avatar_file_name, :string         # Hidden 
  #     configure :avatar_content_type, :string         # Hidden 
  #     configure :avatar_file_size, :integer         # Hidden 
  #     configure :avatar_updated_at, :datetime         # Hidden 
  #     configure :avatar, :paperclip 
  #     configure :roles_mask, :integer 

  #   # Cross-section configuration:

  #     # object_label_method :name     # Name of the method called for pretty printing an *instance* of ModelName
  #     # label 'My model'              # Name of ModelName (smartly defaults to ActiveRecord's I18n API)
  #     # label_plural 'My models'      # Same, plural
  #     # weight 0                      # Navigation priority. Bigger is higher.
  #     # parent OtherModel             # Set parent model for navigation. MyModel will be nested below. OtherModel will be on first position of the dropdown
  #     # navigation_label              # Sets dropdown entry's name in navigation. Only for parents!

  #   # Section specific configuration:

  #     list do
  #       # filters [:id, :name]  # Array of field names which filters should be shown by default in the table header
  #       # items_per_page 100    # Override default_items_per_page
  #       # sort_by :id           # Sort column (default is primary key)
  #       # sort_reverse true     # Sort direction (default is true for primary key, last created first)
  #     end
  #     show do; end
  #     edit do; end
  #     export do; end
  #     # also see the create, update, modal and nested sections, which override edit in specific cases (resp. when creating, updating, modifying from another model in a popup modal or modifying from another model nested form)
  #     # you can override a cross-section field configuration in any section with the same syntax `configure :field_name do ... end`
  #     # using `field` instead of `configure` will exclude all other fields and force the ordering
  # end

end
