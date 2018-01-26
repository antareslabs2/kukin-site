from fabric.api import *
from fabric.colors import *

TEST_PATH = '/var/www/web/data/www/wordpress.imtsoft.ru'

env.roledefs = {
    'test': ['web@imtsoft.ru'],
}

@roles('test')
def test():
    print yellow('#TEST DEPLOYMENT');
    with cd(TEST_PATH):
        run('git pull');

    print green('DONE')

@roles('test')
def get_dump():
    print yellow('#GETTING DUMP FROM TEST');
    with cd(TEST_PATH):
        run('mysqldump -u web -p2N5w8A6m --add-drop-table wordpress > dump.sql');
        get('dump.sql', '_sql');

    local('mysql -u root wordpress < _sql/dump.sql');

    print green('DONE')

@roles('test')
def test_db():
    print yellow('#START DEPLOY');

    with cd(TEST_PATH):
        local('mysqldump -u root --add-drop-table wordpress > dump.sql');
        put('dump.sql', TEST_PATH)
        run('mysql -u web -p2N5w8A6m wordpress < dump.sql');

    print green('DONE')

def commit_localdb():
    print yellow('#START DUMPING');

    with cd(TEST_PATH):
        local('mysqldump -u root --add-drop-table wordpress > _sql/dump.sql');
        local('git commit -m "db changes" _sql/dump.sql');
        local('git push');

    print green('DONE')