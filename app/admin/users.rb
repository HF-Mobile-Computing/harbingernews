ActiveAdmin.register User do

  menu :priority => 2

  filter :name
  filter :email
  filter :last_sign_in_at
  filter :last_sign_in_ip
  filter :current_sign_in_ip

  index as: :table do
    selectable_column
    column :id
    column :name
    column :email
    column :last_sign_in_at
    default_actions
  end
  
  show do
    attributes_table do
      row :id
      row :name
      row :email
      if user.teacher == true
        row :teacher
      end
      unless user.avatar_file_name.nil?
        row(:avatar) { image_tag user.avatar.url(:original) }
      end
    end
    
    panel "Profile" do
      attributes_table do
        row :age
        row :birthday
        row :bio
        row :interests
      end
    end
    
    panel "Statistics" do
      attributes_table do
        row :created_at
        row :updated_at
        row :sign_in_count
        unless user.reset_password_sent_at.nil?
          row :resent_password_sent_at
        end
        unless user.current_sign_in_at.nil?
          row :current_sign_in_at
        end
        unless user.current_sign_in_ip.nil?
          row :current_sign_in_ip
        end
        row :last_sign_in_at
        row :last_sign_in_ip
      end
    end
  end
  
end
