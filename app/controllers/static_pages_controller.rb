class StaticPagesController < ApplicationController
  def about
  end

  def get_involved
  end

  def student_of_the_month
  end

  def graduation
  end

  def college_acceptances
  end

  def calendar
    send_file 'public/cal.png', type: 'image/png', disposition: 'inline'
  end
end
