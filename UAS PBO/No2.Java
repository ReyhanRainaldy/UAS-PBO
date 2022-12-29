class Enemy {
    protected String name;

    public Enemy(String name) {
        this.name = name;
    }

    public void Ability() {
        System.out.println("Enemy's Ability");
    }
}

class Burung extends Enemy {
    public Burung(String name) {
        super(name);
    }

    @Override
    public void Ability() {
        System.out.println("Fly, Walk, Jump");
    }
}