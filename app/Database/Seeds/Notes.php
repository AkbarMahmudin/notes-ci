<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Notes extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Title 1',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 2',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 3',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 4',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 5',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 6',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 7',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 8',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 9',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ],
            [
                'title' => 'Title 10',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum blanditiis mollitia ex molestias, exercitationem totam inventore ea maiores! Molestiae, expedita non excepturi beatae pariatur consectetur iure eaque sed reiciendis.'
            ]
        ];

        foreach ($data as $d) {
            $this->db->table('notes')->insert($d);
        }
    }
}
