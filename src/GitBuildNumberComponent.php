<?php
/**
 * The component for Yii for retrieving the build number and build time information from the git repository (current git branch).
 * @author Voronetskyy Yevgen <http://yev-java.freehostia.com>
 * Date: 21.01.13
 * Time: 19:12
 */

class GitBuildNumberComponent extends CApplicationComponent
{

    const GIT_COMMAND_LAST_COMMIT_ID = "git log --pretty=format:'%h' -n 1";
    const GIT_COMMAND_LAST_COMMIT_TIME = "git log --pretty=format:'%ci' -n 1";


    /*
     * To prevent users from untested results, we check the command output before continue
     */
    private function checkExecOutput($gitCommand, $execReturnVal)
    {
        if ($execReturnVal !== 0)
        {
            throw new CException('Error while executing git command "'.$gitCommand.'". Return code is : '.$execReturnVal.'.');
        }
    }

    private function execGit($gitCommand)
    {
        exec($gitCommand, $output, $execReturnVal);
        $this->checkExecOutput($gitCommand, $execReturnVal);
        return $output[0];
    }

    /**
     * Get the last commit sha identifier
     * {@throw CException} if there is any problem during the command execution
     * @return last commit sha identifier
     */
    public function getLastCommitId()
    {
        return $this->execGit(self::GIT_COMMAND_LAST_COMMIT_ID);
    }

    public function getLastCommitDate()
    {
        return $this->execGit(self::GIT_COMMAND_LAST_COMMIT_TIME);
    }
}
?>