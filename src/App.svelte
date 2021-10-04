<script>
import Router from "svelte-spa-router";
import Home from "./routes/Home.svelte";
import NotFound from "./routes/NotFound.svelte";
import Header from "./components/Header.svelte";
import Footer from "./components/Footer.svelte";
import Display from "./routes/Display.svelte";
import AddItems from "./routes/AddItems.svelte";
</script>

<Header/>
<main>
	<Router routes={{
		"/": Home, 
		"/additems": AddItems,
		"/display": Display,
		"*": NotFound, 
	}}/>
</main>
<Footer/>

