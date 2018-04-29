# Run an update on the box.
execute "apt-get-update" do
  command "env > /srv/www/app1/file1.txt"
end

cookbook_file "/srv/www/app1/file1.txt" do
  mode '0644'
  action :touch
  owner 'deploy'
  group 'www-data'
end