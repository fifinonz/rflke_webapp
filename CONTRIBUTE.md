#HOW TO CONTRIBUTE

##Getting Started

1. Fork Repo to your Github Account.
2. Clone your fork to your local machine. Make sure you add an upstream to keep your fork synced

             git clone https://github.com/YOURUSERNAME/rflke_webapp.git
    
             git remote add upstream https://github.com/RFL-KE/rflke_webapp.git
             
##To Sync your fork:
              git fetch --all
              git pull upstream master
              git push origin master
              
##Work Flow:
    
1. Start a new branch for the new feature your working on

            git checkout -b mynewfeature
    
2. Merge your branch to the master branch of your fork.

              git checkout master
    
              git merge mynewfeature
    
3. Submit a new pull request.
4. Our developers will review your changes and either accept them or ask you to edit your work.
