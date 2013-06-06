class Ability
  include CanCan::Ability

  def initialize(user)
    
    user ||= User.new # guest user (not logged in)
    
    can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement, User]
    can :manage, User, :id => user.id
    
    # Admin
    if user.has_role? :admin
      can :manage, :all
      can :access_active_admin
      
    # Editor
    elsif user.has_role? :editor
      can :manage, [Club, Sport]
      can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]
      can :access, active_admin
      can :dashboard
      
    # Secretary
    elsif user.has_role? :secretary
      can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]
      can :manage, [Announcement, RecentEvent, UpcomingEvent, Bus]
      can :access_active_admin
      can :dashboard
      
    end
  end
end
