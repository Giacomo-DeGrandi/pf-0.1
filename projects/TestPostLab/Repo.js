

// changed from default to simple class in order to access it from index.js
export class Repo {

    constructor({repo, owner}){
        this.repo = repo
        this.owner = owner
        if(this.repo == null){
            this.repo = 'repos'
        } else if (this.owner == null){
            this.owner = 'users'
        }
    }

    async getRepo(){
        // https://api.github.com/repos/twbs/bootstrap
        const response = await fetch(`https://api.github.com/repos/${this.owner}/${this.repo}`)
        if(response.status === 200){
            const json = await response.json()
            console.log(json)
        } else {
            console.log('please insert the Owner AND the Repo name to see them')
        }
    }

}

export class Owner {

    constructor({owner}){
        this.owner = owner
    }

    async getReposByOwner(){
        // https://api.github.com/repos/twbs/bootstrap
        const response = await fetch(`https://api.github.com/users/${this.owner}/repos`)
        if(response.status === 200){
            const json = await response.json()
            console.log(json)
        } else {
            console.log('please insert the Owner AND the Repo name to see it')
        }
    }

}

