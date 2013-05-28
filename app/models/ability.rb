class Ability
  include CanCan::Ability

  def initialize(user)
    # Define abilities for the passed in user here.
    # See the wiki for details:
    # https://github.com/ryanb/cancan/wiki/Defining-Abilities
    
    user ||= User.new # guest user (not logged in)
    
    can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement, User]
    can :manage, User, :id => user.id

    if user.has_role? :admin
        can :manage, :all
    elsif user.has_role? :editor
      can :manage, [Club, Sport]
      can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]
      can :access, :rails_admin
      can :dashboard
    elsif user.has_role? :secretary
      can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]
      can :manage, [Announcement, RecentEvent, UpcomingEvent, Bus]
      can :access, :rails_admin
      can :dashboard
    end
  end
end
