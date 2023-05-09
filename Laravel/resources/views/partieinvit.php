<div id="invit">
                <div id="invitation" class="conteneurinfo">
                    <h3>invitation:</h3>
                    <div v-for="invit in invitations">
                        <p>{{invit.destinataire}} vous invite à l'événement {{invit.event}}</p>
                        <div class="checkinvit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" @click="accepter(invit)"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" @click="refuser(invit)"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                        </div>
                    </div>
                </div>
                <div id="assodemande" class="conteneurinfo">
                    <h3>Demande:</h3>
                    <div v-for="demande in demandes">
                        <p>{{demande.nom}} {{demande.prenom}} veut rejoindre {{demande.asso}}</p>
                        <div class="checkinvit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" @click="accepter(demande)" ><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" @click="refuser(demande)" ><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                        </div>
                    </div>
                    
                </div>
            </div>
            

<script>
    const invitation= Vue.createApp({
            data(){
                return {
                    invitations: [ 
                        {nom:'Nom1',prenom:'Prenom1',destinataire:'Nom Prenom', event:'NomEvent'},
                        {nom:'Nom2',prenom:'Prenom2',destinataire:'Nom Prenom', event:'NomEvent2'}
                    ]
                }
            },
            methods:{
                accepter(inv){
                    alert('Vous participez à '+inv.event)
                    this.invitations.splice(this.invitations.findIndex(invit => invit.event == inv.event),1)
                }, 
                refuser(inv){
                    this.invitations.splice(this.invitations.findIndex(invit => invit.event == inv.event),1)
                }
            }

        }).mount('#invitation')



        const Demande= Vue.createApp({
            data(){
                return {
                    demandes: [ 
                        {nom:'Nom1',prenom:'Prenom1', asso:'Nomasso'},
                        {nom:'Nom2',prenom:'Prenom2', asso:'Nomasso2'},
                        {nom:'Nom3',prenom:'Prenom3', asso:'Nomasso3'}
                    ]
                }
            },
            methods:{
                accepter(demande){
                    alert(demande.nom+' '+demande.prenom+' a rejoint '+demande.asso)
                    this.demandes.splice(this.demandes.findIndex(dem => dem.asso === demande.asso),1)
                }, 
                refuser(demande){
                    this.demandes.splice(this.demandes.findIndex(dem => dem.asso === demande.asso),1)
                }
            }

        }).mount('#assodemande')

</script>