ActiveAdmin.register_page "Dashboard" do

  menu :priority => 1, :label => proc{ I18n.t("active_admin.dashboard") }

  content :title => proc{ I18n.t("active_admin.dashboard") } do
  
    # Announcements
    columns do
      column do
        panel "Site History" do
          table_for Version.order('id desc') do
            column :whodunnit 
            column :item_type
            column :event
            column :created_at
          end
        end
      end
    end
    
    

  end # content
end
