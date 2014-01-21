ActiveAdmin.register_page "Dashboard" do
sidebar :help do
      ul do
        h1 "Attention:"
        h3 "All changes to this site are logged. Remember, Admin Access is a privledge. Only modify what you have direct permission to."
      end
    end

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
