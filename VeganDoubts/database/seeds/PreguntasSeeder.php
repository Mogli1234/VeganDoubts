<?php

use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'Isn’t it hard to be vegan?',
            'pregunta_desc'=>'Let’s be honest. If you grew up eating meat, milk, and eggs in almost every meal, the idea of going vegan certainly seems hard—maybe even impossible!
                But most vegans discover the switch is far easier than they ever imagined. All you have to do is focus on crowding out animal-based foods rather than cutting them out. That is, don’t eliminate a meat, dairy, or egg product from your diet until you’ve found two or three great new vegan foods than can take its place. When you focus on crowding rather than cutting, you eliminate all feelings of strain and sacrifice. Your diet actually becomes more interesting, varied, and delicious as you fill it with more and more vegan foods.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'Where do you get your protein?',
            'pregunta_desc'=>'Despite what you may have heard, protein is actually not much of a worry for most vegans.
            Not so long ago, conventional wisdom had it that vegans and vegetarians risked dangerous protein deficiencies. But over time this myth has largely died out, doubtless due to the fact that have been virtually no instances of vegans falling victim to acute protein deficiency.
            Grains, beans, nuts, and vegetables all have surprisingly large amounts of protein. So vegans who get enough calories and eat a decent variety of foods are unlikely to be protein deficient.
            While outright cases of protein deficiency are extremely rare, it’s certainly possible to be on the low end of the spectrum for protein, especially if you don’t take in many calories and if fruit or refined sugars make up a high percentage of your diet. If that’s the case, you’ll want to be sure to include more protein-rich vegan foods in your diet. Some extraordinarily good vegan protein sources include:
            Beans, nuts, tofu, quinoa, tempeh, soymilk, etc.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'I only eat free-range eggs. That’s okay, right?',
            'pregunta_desc'=>'When it comes to animal welfare, free-range eggs are certainly better than battery cage eggs. Sometimes even a lot better. But better isn’t perfect, and free-range eggs are far from perfect.
                The hatcheries that provide hens to most free-range egg farms kill their male chicks immediately upon hatching. These newly-hatched male chicks are generally ground up alive; in other cases they smother in garbage bags or dumpsters.
                Even if kept in spacious conditions, free-range hens have it rough. Like their battery cage counterparts, they’ve been bred to lay eggs at especially high rates, which in turn exposes them to all manner of health problems. And nearly all hens, both caged and free-range alike, are slaughtered before reaching the midpoint of their natural lives. That’s because egg yields decline as the hens age, and the cost of purchasing new hens is trivial when set against the increased egg output of younger birds.
                Finally, since cage-free eggs can cost more than twice the price of conventional eggs, there are countless egg farmers who have a big incentive to do the bare minimum possible to label their eggs as cage-free. Unless you personally visit the farm and check the conditions out for yourself, the quality of life for the hens who produce your eggs can fall far short of your expectations.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'Isn’t it expensive to be vegan?',
            'pregunta_desc'=>'Once you learn the basics, your food bill can be lower than omnivores while consisting of higher-quality food.
                There’s plenty of cheap yet high-quality vegan food out there, and the trick to finding it all is learning how to shop effectively.
                The key to being vegan on the cheap is to buy unprocessed foods in bulk. Every good natural foods store has a bulk section where you can buy everything from beans to grains to nuts to granola. If you can keep most of your purchases to items costing under $3 a pound your grocery bill will be remarkably low.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'I could never be vegan, I love the taste of meat too much.',
            'pregunta_desc'=>'You’ll be amazed by how much meat alternatives have improved in the past few years. In fact, some of the vegan meats on the market today are so convincing that many die-hard meat eaters can’t even tell the difference. There are wonderfully convincing versions of hamburger, chicken, bacon, deli meats, and even shrimp and jerky.
            And don’t forget falafel! These flavorful and satisfying balls don’t taste at all like meat, but stuffed into a pita with veggies and tahini dressing they’ll leave you as satisfied as any hamburger.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'Haven’t we evolved to eat meat? It’s natural!',
            'pregunta_desc'=>'The question isn’t whether humans have in the past relied on meat to survive, the question is whether there’s any clear benefit to eating meat today.
                There’s no doubt that at many times in history, especially during periods of war and famine, the ability for people to eat meat helped ensure their survival. Likewise, there are some parts of the world today where local populations depend of fish, poultry, or livestock for protein and calories. That’s because marginal lands that won’t support agriculture can often still support the grazing of livestock, and some coastal areas have insufficient land for farming but access to substantial amounts of fish.
                That said, few people living in developed countries can credibly claim that their survival depends on animal products. In terms of nutrition, there’s nothing in animal products that isn’t readily available from a well-planned vegan diet.
                And if we were really intent on feeding the world, we would stop feeding a huge portion of the worldwide grain crop to livestock (which entails massive food waste), and instead grow grains for human consumption.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'You don’t have to kill animals to get dairy and eggs, so what’s wrong with those products?',
            'pregunta_desc'=>'The truth is that all commercially-raised animal products—including milk and eggs—involve killing.
                When it comes to killing, the only difference from eggs and dairy products is that while meat comes from an animal who has been slaughtered, milk and eggs come from animals who will be slaughtered. Guaranteed. Every dairy cow and egg-laying hen inevitably goes to slaughter (unless they die prematurely from disease).
                Milk and eggs have one major thing in common: they’re the reproductive products of young females. As cows and chickens age, their milk and egg yields decline markedly. In consequence, nearly all dairy cows and layer hens are sent to slaughter at less than half their natural life expectancy; replaced by younger animals who will also in turn be slaughtered when their yields decline.
                Add to this that the America’s egg industry breeds more than 200 million replacement hens every year, and that it’s standard practice for dairy cows to be kept pregnant nine months out of every year. What happens to the males born in these systems? Male chicks are unwanted since, being of the egg-laying variety, they can’t profitably be raised for meat. These animals are generally ground up alive, or smothered within hours of hatching. Male calves produced by the dairy industry likewise have little value. Some are sold for a pittance to veal farms, while others are slaughtered immediately upon birth.
                These dark realities tend to be true regardless of whether we’re talking about the worst factory farms, or the best free-range egg farms and organic dairies.',
        ]);

        DB::table('preguntas')->insert([
            'pregunta_titulo'=>'Cows need to be milked, don’t they? We’re just doing them a favor.',
            'pregunta_desc'=>'Once you understand how the dairy industry operates, you’ll see that cows get a raw deal.
                A cow only needs to be milked because she had her calf taken away from her within a day or two of birth. The calf gets a cheap replacement formula generally made from slaughterhouse plasma. Does this sound like a fair deal to you? And in a few months, after the cow’s milk yields peak, she’ll be re-impregnated once again to start the whole cycle all over.
                All in all, it’s a terrible life for these animals, especially the cows who live on “dry lot” dairies who are confined in crowded sheds. Disease is common, especially mastitis—an infection of the udders brought on by the enormous milk yields of modern-day dairy cows.
                Luckily, dairy products have never been so easy to avoid. Every most groceries today sell soy, rice, and almond milk. Look for these products in the dairy case. You can also find them packed in aseptic juice boxes.',
        ]);

    }
}
