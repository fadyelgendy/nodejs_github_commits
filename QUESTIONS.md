- How were you debugging this mini-project? Which tools?
  For debugging is used:
    - Syfony profile packge
    - `php bin\console debug` commands set.
- How were you testing the mini-project?
  For testing I used:
    - Insomnia RESt API client for testign the API
- Imagine this mini-project needs microservices with one single database, how would you draft an architecture?
  If we decide to migrate to use microservices, i think it would be like that
    github API => Cache Server (e.g redis) => Backend (for recieving data from API and process it) => Load Balancer (For database transations if we will use a big amount of data) => FrontEnd (e.g Vuejs, React)
- How would your solution differ when all over the sudden instead of saving to a Database you would have to call another external API to store and receive the commits.
  Not more actually, in this case instead of saving to local database, after processing data coming from the Github API, we will and one more function or separate class to handle the outgoing request to the other API endpoint.