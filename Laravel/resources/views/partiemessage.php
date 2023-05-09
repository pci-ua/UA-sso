
<h4>notification</h4>
    <section id="contentmessage">
        <input ref="msg" type="text">
        <button @click="envoie">Envoyer</button>
    </section>

<script>
var Url=window.location.pathname;
console.log(Url);
console.log(Url.split('/'));
console.log(Url.split('/')[2]);
    const messages= Vue.createApp({
        data(){
            return {
                message: 'Test'
            }
        },
        methods:{
                envoie(){
                    alert('Vous avez notifié: '+this.$refs.msg.value)
                }
            }

    }).mount('#contentmessage')

</script>