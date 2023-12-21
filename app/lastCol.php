<aside id="section3">
            <h2>Joueurs</h2>
            <div >
                <?php foreach ($result as $res){?>
                <p class="players"> <?php echo($res["Name"]);?> </p>
                <?php } ?>
            </div>
        </aside>
    </main>