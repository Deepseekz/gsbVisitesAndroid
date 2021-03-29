<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * JoueursRencontres Controller
 *
 * @property \App\Model\Table\JoueursRencontresTable $JoueursRencontres
 *
 * @method \App\Model\Entity\JoueursRencontre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JoueursRencontresController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {

        $this->paginate = [
            'contain' => ['Joueurs', 'Rencontres']
        ];
        $joueursRencontres = $this->paginate($this->JoueursRencontres);

        $this->set(compact('joueursRencontres'));
    }

    /**
     * View method
     *
     * @param string|null $id Joueurs Rencontre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $joueursRencontre = $this->JoueursRencontres->get($id, [
            'contain' => ['Joueurs', 'Rencontres']
        ]);

        $this->set('joueursRencontre', $joueursRencontre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {



        $joueursRencontre = $this->JoueursRencontres->newEntity();

        if ($this->request->is('post')) {
            $joueursRencontre = $this->JoueursRencontres->patchEntity($joueursRencontre, $this->request->getData());
            try {
                if ($this->JoueursRencontres->save($joueursRencontre)) {
                    $this->Flash->success(__('The joueurs rencontre has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            } catch (\PDOException $Exception) {
                $this->Flash->error(__('The joueurs rencontre could not be saved. Please, try again.'));
            }
        }
        $joueurs = $this->JoueursRencontres->Joueurs->find('list', ['limit' => 200]);
        $rencontres = $this->JoueursRencontres->Rencontres->find('list', ['limit' => 200]);
        $this->set(compact('joueursRencontre', 'joueurs', 'rencontres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Joueurs Rencontre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {

        try {
            $joueursRencontre = $this->JoueursRencontres->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $joueursRencontre = $this->JoueursRencontres->patchEntity($joueursRencontre, $this->request->getData());
                if ($this->JoueursRencontres->save($joueursRencontre)) {
                    $this->Flash->success(__('The joueurs rencontre has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The joueurs rencontre could not be saved. Please, try again.'));
            }
            $joueurs = $this->JoueursRencontres->Joueurs->find('list', ['limit' => 200]);
            $rencontres = $this->JoueursRencontres->Rencontres->find('list', ['limit' => 200]);
            $this->set(compact('joueursRencontre', 'joueurs', 'rencontres'));
        } catch (\PDOException $Exception) {
            throw new MyDatabaseException($Exception->getMessage(), $Exception->getCode());
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Joueurs Rencontre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $joueursRencontre = $this->JoueursRencontres->get($id);
        if ($this->JoueursRencontres->delete($joueursRencontre)) {
            $this->Flash->success(__('The joueurs rencontre has been deleted.'));
        } else {
            $this->Flash->error(__('The joueurs rencontre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
