
    <h1>Gestion Stock</h1>
    <section id="contentstock">
        <div class="produit" v-for="prod in produits">
            <h4>{{prod.nom}}</h4>
            <p>: {{prod.quantite}}   |  </p>
            <input ref="quantite" class="zonenbr" type="number" name="nombreproduit" > 
            <input type="button" value="ajouter" @click="ajout(prod)">
            <input type="button" value="-" @click="moins(prod)">
            <input type="button" value="+" @click="plus(prod)">
        </div>
    </section>
    <section id="creationproduit">
        <label for="nomproduit">Nom:</label>
        <input type="text" name="nomproduit" v-model="nom">
        <label for="nomproduit">Quantité:</label>
        <input type="number" name="nombreproduit" v-model="quantite" >
        <input type="button" value="Creer Produit" @click="creer">
        {{message}}
    </section>

<script>

    const lesproduits= Vue.createApp({
        data(){
            return {
                message: 'Test',
                quantite:0,
                produits: [ 
                    {nom:'Coca-Cola', quantite:4},
                     {nom:'Orangina', quantite:5}
                ]
            }
        },
        methods:{
                ajout(prod){
                    index=this.produits.findIndex(produit=> produit.nom === prod.nom )
                    ajout=parseInt(this.$refs.quantite[index].value)
                    if(Number.isInteger(ajout))
                        this.produits[index].quantite+=ajout
                },
                plus(prod){
                    index=this.produits.findIndex(produit=> produit.nom === prod.nom )
                    this.produits[index].quantite++
                },
                moins(prod){
                    index=this.produits.findIndex(produit=> produit.nom === prod.nom )
                    this.produits[index].quantite--
                }
            }

    }).mount('#contentstock')



    const creationproduit= Vue.createApp({
        data(){
            return {
                message: 'Test',
                nom:'Produit',
                quantite:0
            }
        },
        methods:{
            creer(){
                lesproduits.produits.push({nom: this.nom , quantite: this.quantite})
            }
        }
    }).mount('#creationproduit')

</script>