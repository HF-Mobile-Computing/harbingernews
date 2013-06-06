ActiveAdmin.register_page "Dashboard" do

  menu :priority => 1, :label => proc{ I18n.t("active_admin.dashboard") }

  content :title => proc{ I18n.t("active_admin.dashboard") } do
  
    # Announcements
    columns do
      column do
        panel "Todays Announcements" do
          table_for Announcement.order('id desc').limit(1) do
            column :created_at
            column(:content) { |c| raw(c.content) }
          end
        end
      end
    end
    
    

  end # content
end
