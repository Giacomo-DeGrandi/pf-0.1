
import {Repo} from './Repo.js';
import {Owner} from './Repo.js';


(async()=>{

    const params = (new URL(document.location)).searchParams;
    const repo = params.get('repo');
    const owner = params.get('owner');

    const repoInfo = {repo, owner}

    console.log(repoInfo)


        const myOwner = new Owner(repoInfo)

        await myOwner.getReposByOwner()


        const myRepo = new Repo(repoInfo)

        await myRepo.getRepo()


})() ;   // attention to the semicolon if u want to add another (async()=>{}) !!!








