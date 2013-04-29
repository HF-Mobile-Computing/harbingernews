class Ability
  include CanCan::Ability

  def initialize(user)
    # Define abilities for the passed in user here.
    # See the wiki for details:
    # https://github.com/ryanb/cancan/wiki/Defining-Abilities
    
    user ||= User.new # guest user (not logged in)
    
    can :read, :all

    if user.has_role? :admin
        can :manage, :all
    
    elsif user.has_role? :editor
      can :manage, [Club, Sport]
      can :read, :all
    
    end

  end
end
