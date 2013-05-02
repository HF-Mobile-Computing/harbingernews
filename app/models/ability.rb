class Ability
  include CanCan::Ability

  def initialize(user)
    # Define abilities for the passed in user here.
    # See the wiki for details:
    # https://github.com/ryanb/cancan/wiki/Defining-Abilities
    
    user ||= User.new # guest user (not logged in)
    
    can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]

    if user.has_role? :admin
        can :manage, :all
    elsif user.has_role? :editor
      can :manage, [Club, Sport]
      can :read, [Club, Sport, Bus, UpcomingEvent, RecentEvent, Memo, Announcement]
      can :access, :rails_admin
      can :dashboard
    end
  end
end
