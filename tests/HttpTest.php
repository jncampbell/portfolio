<?php


class HttpTest extends TestCase
{
    public function tests_home_page_loads()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }

    public function tests_home_page_loads_correct_view()
    {
        $this->call('GET', '/');
        $this->see('James Campbell | Web Developer');
    }

    public function tests_projects_page_loads()
    {
        $this->call('GET', '/projects');
        $this->assertResponseOk();
    }

    public function tests_projects_page_loads_correct_view()
    {
        $this->call('GET', '/projects');
        $this->see('Projects');
    }

    public function tests_timer_project_page_loads()
    {
        $this->call('GET', '/projects/timer');
        $this->assertResponseOk();
    }

    public function tests_timer_project_page_loads_correct_view()
    {
        $this->call('GET', '/projects/timer');
        $this->see('Productivity Timer');
    }

    public function tests_club_app_project_page_loads()
    {
        $this->call('GET', '/projects/club-app');
        $this->assertResponseOk();
    }

    public function tests_club_app_project_page_loads_correct_view()
    {
        $this->call('GET', '/projects/club-app');
        $this->see('Club App');
    }

    public function tests_about_page_loads()
    {
        $this->call('GET', '/about');
        $this->assertResponseOk();
    }

    public function tests_about_page_loads_correct_view()
    {
        $this->call('GET', '/about');
        $this->see('About Me');
    }

    public function tests_contact_page_loads()
    {
        $this->call('GET', '/contact');
        $this->assertResponseOk();
    }

    public function tests_contact_page_loads_correct_view()
    {
        $this->call('GET', '/contact');
        $this->see('Contact Me');
    }
}
